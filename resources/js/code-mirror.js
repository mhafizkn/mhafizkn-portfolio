import CodeMirror from 'codemirror';
import 'codemirror/addon/edit/matchbrackets';
import 'codemirror/addon/edit/closebrackets';
import 'codemirror/addon/lint/lint';

// import 'codemirror/mode/javascript/javascript.js';
// import 'codemirror/mode/htmlmixed/htmlmixed.js';
// import 'codemirror/mode/xml/xml.js';
import 'codemirror/mode/css/css.js';
// import 'codemirror/mode/clike/clike.js';
// import 'codemirror/mode/php/php.js';

var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    theme: 'ambiance',
    lineWrapping: true,
    lineNumbers: true,
    matchBrackets: true,
    autoCloseBrackets: true,
    mode: "css",
    indentUnit: 4,
    indentWithTabs: true,
    tabSize: 4,
    lint: true,
    gutters: ["CodeMirror-lint-markers"],
});
