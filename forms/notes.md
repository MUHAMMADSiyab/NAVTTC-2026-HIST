# Quick Notes
## Forms
HTML forms collect user input and send it to a server for processing — used for login pages, 
sign-up flows, search bars, file uploads, surveys, and any interaction where the user submits 
data.

---
## Form Tag
`<form>` wraps all form controls.

`action` sets the URL where data is sent. `method` controls how — `get` appends data to the URL, 
`post` sends it in the request body.

`enctype` sets the encoding type — use `multipart/form-data` when the form includes file 
uploads.

`autocomplete` turns browser autofill on or off. `novalidate` skips the browser's built-in 
validation. `target` controls where the response loads — `_self`, `_blank`, etc.

---
## Input Types
`<input>` is a self-closing tag. Its `type` attribute controls what the browser renders:

| Type | What it renders |
|------|----------------|
| `text` | Single-line text field |
| `email` | Text field that validates email format |
| `url` | Text field that validates URL format |
| `number` | Numeric field with up/down arrows |
| `date` | Date picker (year, month, day) |
| `datetime-local` | Date + time picker (no timezone) |
| `week` | Week and year picker |
| `month` | Month and year picker |
| `color` | Color swatch / color picker |
| `range` | Draggable slider for a numeric range |
| `submit` | Button that submits the form |
| `reset` | Button that clears all fields to defaults |

---
## Textarea
`<textarea>` is a paired tag for multi-line text input. Unlike `<input>`, the default value goes 
between the opening and closing tags.

`rows` sets the visible height in lines, `cols` sets the visible width in characters. 
`placeholder` and `maxlength` work the same as on `<input>`. Resize behavior is controlled via 
CSS.

---
## Select & Datalist
`<select>` creates a dropdown menu. Each option is wrapped in `<option 
value="...">Label</option>`. Group related options with `<optgroup label="...">`. Add `multiple` 
to allow selecting more than one option.

`<datalist>` pairs with an `<input>` via matching `id` and `list` attributes — it offers 
autocomplete suggestions while still letting the user type freely. Options inside `<datalist>` 
use `<option value="...">` with no closing content needed.

---
## Checkbox & Radio
Both use `<input>` with their respective `type`. A `<label>` should always be linked via `for` 
matching the input's `id` for accessibility.

**Checkbox** — each box is independent; any number can be checked. Give each its own `name` or 
use the same `name` with `[]` for arrays.

**Radio** — buttons in a group share the same `name`. Only one can be selected at a time. The 
browser enforces mutual exclusion within the group automatically.

---
## File Input
`<input type="file">` opens the OS file picker.

The `accept` attribute filters which files appear — it takes MIME types like `image/png` or 
`application/pdf`, or file extensions like `.jpg` or `.docx`, comma-separated.

Add `multiple` to allow selecting more than one file. Always set `enctype="multipart/form-data"` 
on the parent `<form>` when using file inputs.

---
## Constraint Attributes
These attributes control validation and interactivity on any form control:

| Attribute | Effect |
|-----------|--------|
| `required` | Field must be filled before submission |
| `readonly` | Value is visible and submittable but not editable |
| `disabled` | Field is greyed out, not editable, and excluded from submission |
| `placeholder` | Ghost text shown when field is empty |
| `maxlength` | Maximum number of characters allowed |
| `minlength` | Minimum number of characters required |
| `min` / `max` | Lower and upper bounds for number, date, and range inputs |
| `step` | Increment size for number and range inputs |
| `pattern` | Regular expression the value must match |
| `autofocus` | Field receives focus automatically on page load |
| `autocomplete` | Hints to the browser whether to offer saved values (`on` / `off`) |
| `multiple` | Allows multiple values (file inputs, selects, email) |
