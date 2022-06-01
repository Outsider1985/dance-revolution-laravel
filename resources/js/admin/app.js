require('./bootstrap');

import {plusMinusBtns} from './desktop/plusMinusBtns.js';
import {tabBtns} from './desktop/tabBtns.js';
import {form} from './desktop/form.js';
import {ckeditor} from './desktop/ckeditor.js';
import {elementDelete} from './desktop/deleteBtn.js';
import {filter} from './desktop/filterBtn.js';
import {imageUpload} from './desktop/imageUpload.js';
import {renderTable} from './desktop/table.js';

imageUpload();
filter();
elementDelete();
plusMinusBtns();
tabBtns();
form();
ckeditor();
renderTable();