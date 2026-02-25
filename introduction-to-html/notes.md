# Quick Notes

## Headings
HTML has 6 heading levels. `<h1>` is most important, `<h6>` least. Use only one `<h1>` per page — browsers, search engines, and screen readers use headings to understand page structure.

---

## Paragraph Tag
`<p>` wraps a block of text with automatic spacing above and below. Multiple spaces or line breaks inside collapse into a single space.

---

## br & hr Tags
`<br>` forces a line break without starting a new paragraph. `<hr>` draws a horizontal divider between sections. Both are unpaired — no closing tag.

---

## HTML Entities
Some characters have special meaning in HTML and must be escaped:

| Character | Entity |
|-----------|--------|
| `<` | `&lt;` |
| `>` | `&gt;` |
| `&` | `&amp;` |
| Space | `&nbsp;` |
| `©` | `&copy;` |
| `"` | `&quot;` |

---

## Attributes
Attributes give extra info to a tag, written as `name="value"` inside the opening tag. Common ones: `href` (link destination), `src` (image source), `alt` (fallback image text), `class` (CSS styling).
