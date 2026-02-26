# Quick Notes

## b and strong
`<b>` makes text **bold** visually. `<strong>` means important — also bold, but carries semantic 
weight for screen readers.

---

## i and em
`<i>` italicizes text visually. `<em>` means emphasis — also italic, but semantically 
meaningful.

---

## u and ins
`<u>` underlines text. `<ins>` marks inserted content — also underlined, but semantic (used with 
`datetime` attribute).

---

## s and del
`<s>` shows text as no longer relevant (strikethrough). `<del>` marks deleted content — also 
strikethrough, but semantic.

---

## mark
`<mark>` highlights text with a yellow background by default. Used to show relevance or search 
matches.

---

## blockquote and q
`<blockquote>` is for long, block-level quotes — indented by browsers. `<q>` is for short inline 
quotes — browsers add quotation marks automatically. Both support the `cite` attribute for the 
source URL.

---

## pre
`<pre>` preserves whitespace and line breaks exactly as written. Used for code or ASCII art. 
Usually rendered in a monospace font.

---

## a (Anchor Tag)
Links to pages, files, or page sections. Key attributes: `href` (destination), `target` (where 
to open — `_blank` opens a new tab), `download` (prompts file download instead of navigating).

**Single-page navigation:** Give any element an `id`, then link to it with `href="#that-id"`. 
Clicking scrolls directly to that element. The `#` part is called a hash.

---

## Absolute vs Relative URLs
**Absolute:** Full URL including protocol — `https://example.com/page.html`. Works from 
anywhere.  
**Relative:** Path relative to current file — `about.html` or `../images/pic.jpg`. Shorter, but 
depends on file location.
