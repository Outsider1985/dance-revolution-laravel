require('./bootstrap');

import {plusMinusBtns} from './desktop/plusMinusBtns.js';
import {tabBtns} from './desktop/tabBtns.js';
import {form} from './desktop/form.js';
import {ckeditor} from './desktop/ckeditor.js';
import {elementDelete} from './desktop/deleteBtn.js';
import {filter} from './desktop/filterBtn.js';

filter();
elementDelete();
plusMinusBtns();
tabBtns();
form();
ckeditor();
