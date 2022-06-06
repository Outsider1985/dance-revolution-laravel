require('./bootstrap');

import {plusMinusBtns} from './desktop/plusMinusBtns.js';
import {tabBtns} from './desktop/tabBtns.js';
import {renderForm} from './desktop/form.js';
import {ckeditor} from './desktop/ckeditor.js';
import {renderModalDelete} from './desktop/modalDelete.js';
import {filter} from './desktop/filterBtn.js';
import {imageUpload} from './desktop/imageUpload.js';
import {renderTable} from './desktop/table.js';

imageUpload();
filter();
plusMinusBtns();
tabBtns();
ckeditor();
renderForm();
renderTable();
renderModalDelete();