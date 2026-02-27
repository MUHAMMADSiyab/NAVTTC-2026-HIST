# Quick Notes

## ul, ol, dl and li

`<ul>` creates an unordered (bulleted) list.

`<ol>` creates an ordered (numbered) list.

`<li>` is each list item inside both — its `type` attribute changes the marker style (e.g., `1`, `A`, `a`, `I`, `i`).

`<dl>` is a description list — uses `<dt>` for the term and `<dd>` for its definition. No `<li>` used in `<dl>`.

---

## table and caption

`<table>` defines a table.

`<caption>` adds a title above it.

Key attributes: `border` (border thickness), `bordercolor` (border color), `bgcolor` (background color), `cellspacing` (space between cells), `cellpadding` (space inside cells).

---

## thead, tbody, tfoot

`<thead>` holds the header row(s).

`<tbody>` holds the main data.

`<tfoot>` holds the footer row(s) (e.g., totals).

Browsers may use these for scrolling or printing behavior.

---

## tr, th and td

`<tr>` is a table row.

`<th>` is a header cell — bold and centered by default, carries semantic meaning.

`<td>` is a standard data cell.

Both `<th>` and `<td>` sit inside `<tr>`.

---

## colspan and rowspan

`colspan` merges cells horizontally across columns.

`rowspan` merges cells vertically across rows.

Both are attributes on `<th>` or `<td>` — value is the number of cells to span.
