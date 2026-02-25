# HTML Quick Notes

## Headings
HTML has 6 heading levels. `<h1>` is the most important, `<h6>` the least.
Only one `<h1>` per page. Used by browsers, search engines, and screen readers to understand 
page structure.
```html
<h1>Main Title</h1>
<h2>Section</h2>
<h3>Subsection</h3>
```

---

## Paragraph Tag
`<p>` wraps a block of text. Browser automatically adds spacing above and below.
Multiple spaces or line breaks inside `<p>` collapse into a single space.
```html
<p>This is a paragraph.</p>
```

---

## br Tag
Forces a line break without starting a new paragraph. Unpaired — no closing tag.
```html
<p>Line one.<br>Line two.</p>
```

---

## hr Tag
Draws a horizontal line. Used to separate sections visually. Unpaired — no closing tag.
```html
<p>Section one.</p>
<hr>
<p>Section two.</p>
```

---

## HTML Entities
Some characters have special meaning in HTML (like `<` and `>`). To display them as text, use 
entities.

| Character | Entity |
|-----------|--------|
| `<` | `&lt;` |
| `>` | `&gt;` |
| `&` | `&amp;` |
| Space | `&nbsp;` |
| `©` | `&copy;` |
| `"` | `&quot;` |
```html
<p>5 &lt; 10 and 10 &gt; 5</p>
```

---

## Attributes
Attributes give extra information to a tag. Written inside the opening tag as `name="value"`.
```html
<a href="https://google.com">Visit Google</a>
<img src="photo.jpg" alt="A photo">
<p class="intro">Hello</p>
```

- `href` — tells `<a>` where to link
- `src` — tells `<img>` which image to load
- `alt` — backup text if image fails to load
- `class` — used to apply CSS styles
