'use strict';

// Генератор файлов блока

// Использование: node createComponent.js [имя блока] [доп. расширения через пробел]

const fs = require('fs');
const fredconfig = require('./fred-config.json');

const srcDir = fredconfig.src;
const mkdirp = require('mkdirp');

const blockName = process.argv[2];          // получим имя блока
const defaultExtensions = ['scss', 'php']; // расширения по умолчанию
const extensions = uniqueArray(defaultExtensions.concat(process.argv.slice(3)));  // добавим введенные при вызове расширения (если есть)

// Если есть имя блока
if (blockName) {
  const dirPath = `${srcDir.components}/${blockName}/`; // полный путь к создаваемой папке блока
  mkdirp(dirPath, (err) => {                                           // создаем
    // Если какая-то ошибка — покажем
    if (err) {
      console.error(`[FRED] Отмена операции: ${err}`);
    }

    // Нет ошибки, поехали!
    else {
      console.log(`[FRED] Создание папки ${dirPath} (если отсутствует)`);

      // Обходим массив расширений и создаем файлы, если они еще не созданы
      extensions.forEach((extention) => {
        const filePath = (extention === 'scss') ? `${dirPath}_${blockName}.${extention}` : `${dirPath + blockName}.${extention}`; // полный путь к создаваемому файлу
        let fileContent = '';                                 // будущий контент файла
        let fileCreateMsg = '';                               // будущее сообщение в консоли при создании файла

        // Если это SCSS
        if (extention === 'scss') {
          fileContent = `.${blockName} {\n  display: block;\n}\n`;
          // fileCreateMsg = '';
        }

        // Если это php
        else if (extention === 'php') {
          fileContent = `<div class="${blockName}">${blockName} content</div>`;
          // fileCreateMsg = '';
        }

        // Если это JS
        else if (extention === 'js') {
          fileContent = '// document.addEventListener(\'DOMContentLoaded\', function(){});\n// (function(){\n// код\n// }());\n';
        }

        // Если нужна подпапка для картинок
        else if (extention === 'img') {
          const imgFolder = `${dirPath}img/`;
          if (fileExist(imgFolder) === false) {
            mkdirp(imgFolder, (err) => {
              if (err) console.error(err);
              else console.log(`[FRED] Создание папки: ${imgFolder} (если отсутствует)`);
            });
          } else {
            console.log(`[FRED] Папка ${imgFolder} НЕ создана (уже существует) `);
          }
        }

        // Создаем файл, если он еще не существует
        if (fileExist(filePath) === false && extention !== 'img') {
          fs.writeFile(filePath, fileContent, (err) => {
            if (err) {
              return console.log(`[FRED] Файл НЕ создан: ${err}`);
            }
            console.log(`[FRED] Файл создан: ${filePath}`);
            if (fileCreateMsg) {
              console.warn(fileCreateMsg);
            }
          });
        } else if (extention !== 'img') {
          console.log(`[FRED] Файл НЕ создан: ${filePath} (уже существует)`);
        }
      });
    }
  });
} else {
  console.log('[FRED] Отмена операции: не указан блок');
}

// Оставить в массиве только уникальные значения (убрать повторы)
function uniqueArray(arr) {
  const objectTemp = {};
  for (let i = 0; i < arr.length; i++) {
    const str = arr[i];
    objectTemp[str] = true; // запомнить строку в виде свойства объекта
  }
  return Object.keys(objectTemp);
}

// Проверка существования файла
function fileExist(path) {
  const fs = require('fs');
  try {
    fs.statSync(path);
  } catch (err) {
    return !(err && err.code === 'ENOENT');
  }
}
