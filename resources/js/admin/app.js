require('./bootstrap');

import {plusMinusBtns} from './desktop/plusMinusBtns.js';
import {tabBtns} from './desktop/tabBtns.js';
import {form} from './desktop/form.js';
import {ckeditor} from './desktop/ckeditor.js';
import {elementDelete} from './desktop/deleteBtn.js';
import {elementEdit} from './desktop/editBtn.js';
import {filter} from './desktop/filterBtn.js';
import {readURL} from './desktop/readURL.js';

readURL();
filter();
elementEdit();
elementDelete();
plusMinusBtns();
tabBtns();
form();
ckeditor();