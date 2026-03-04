# Quick Notes

## Details & Summary

`<details>` creates a native collapsible disclosure widget — no JavaScript needed. Content 
inside
is hidden by default and revealed when the user clicks.

`<summary>` is the visible clickable label and must be the first child of `<details>`. If 
omitted,
the browser shows a default "Details" label.

Add the `open` attribute to `<details>` to have it expanded on page load. Multiple `<details>`
elements are independent — opening one does not close another unless scripted.

---

## Dialog

`<dialog>` represents a modal or non-modal popup box. It is hidden by default — visibility is
controlled via the `open` attribute or JavaScript methods.

`dialog.showModal()` opens it as a modal, blocking interaction with the rest of the page and
adding a backdrop. `dialog.show()` opens it as a non-modal, leaving the page interactive.
`dialog.close()` closes it programmatically.

The `open` attribute can be added directly in HTML to render it visible on load, though
`showModal()` is preferred for proper modal behavior and accessibility.

A `<form>` inside `<dialog>` with `method="dialog"` will close the dialog on submit without
sending data to a server — the submit button's `value` becomes the dialog's `returnValue`.

---

## Progress

`<progress>` displays a progress bar indicating task completion.

`value` sets the current progress. `max` sets the total — defaults to `1` if omitted. The
browser calculates the fill percentage as `value ÷ max`.

Omit `value` entirely to render an indeterminate bar — an animated state used when completion
percentage is unknown (e.g. loading in the background). Styling is limited by default and varies
across browsers; use CSS or a custom element for full control.

---

## Fieldset

`<fieldset>` groups related form controls together, drawing a visible box around them by 
default.

`<legend>` is placed as the first child and acts as the group's caption — it renders embedded in
the top border of the fieldset. It is important for accessibility as it gives context to screen
readers for all controls inside the group.

Adding `disabled` to `<fieldset>` disables every control inside it at once — a convenient
shortcut when a whole section of a form needs to be locked. Disabled fieldset controls are also
excluded from form submission.

---

## Meta Tags

`<meta>` provides document-level metadata. It is a self-closing tag placed inside `<head>` and
never rendered visibly on the page.

`name="description"` sets a short summary of the page — search engines often use this as the
snippet shown under the page title in results. `name="keywords"` once influenced search rankings
but is now largely ignored by major search engines; it holds no SEO value today.

`name="viewport"` controls how the page scales on mobile — `content="width=device-width,
initial-scale=1"` is the standard responsive baseline. `name="author"` records the page author.
`name="robots"` gives instructions to crawlers — values like `noindex` or `nofollow` control
indexing and link-following behavior.

`charset="UTF-8"` declares the character encoding and should be the first tag inside `<head>`.
`http-equiv` lets meta tags simulate HTTP response headers — `http-equiv="refresh"` can redirect
or reload the page after a delay.

---

## Semantic Tags

Semantic tags describe the *role* of their content rather than just wrapping it. They carry
meaning for browsers, search engines, and assistive technologies — unlike a plain `<div>`, a
semantic tag communicates what the content *is*.

`<header>` marks introductory content for the page or a section — typically holds logos,
headings, and navigation. `<footer>` marks closing content — typically holds copyright, links,
and contact info. Both can appear multiple times on a page, scoped to their nearest sectioning
ancestor.

`<nav>` wraps a set of navigation links — main menus, breadcrumbs, or pagination. Not every
group of links qualifies; reserve it for primary navigation blocks.

`<main>` wraps the central, unique content of the page. There should only be one `<main>` per
page and it should not be nested inside `<article>`, `<aside>`, `<header>`, or `<footer>`.

`<article>` marks self-contained content that could stand alone and be redistributed — blog
posts, news articles, forum threads, or product cards. `<section>` groups thematically related
content within a larger piece and typically includes a heading. Sections are parts of something;
articles are independent things.

`<aside>` holds content tangentially related to the surrounding content — sidebars, pull quotes,
related links, or ad slots.

---

## Section vs Div

`<section>` and `<div>` both group content, but carry very different meaning.

`<section>` is a semantic grouping — it signals that its contents form a distinct, thematic
chunk of the document. It should almost always have a heading (`<h2>`, `<h3>`, etc.) to identify
the group.

`<div>` is non-semantic — it carries no meaning at all and is purely a layout or styling hook.
Use it when no semantic element fits, or when you simply need a container for CSS or JavaScript
targeting.

A good rule of thumb: if the block of content would logically appear in a table of contents,
reach for `<section>`. If you just need to wrap something for styling purposes, reach for
`<div>`.
