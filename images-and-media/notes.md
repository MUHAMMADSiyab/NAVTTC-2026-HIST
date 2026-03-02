# Quick Notes

## img

`<img>` embeds an image.
It is self-closing (no closing tag).

`src` sets the image path or URL.
`alt` provides fallback text for accessibility and broken images.

`width` and `height` set dimensions in pixels.
Setting both prevents layout shift.

`loading` controls when the image loads:
`eager` (default, loads immediately)
or
`lazy` (defers until near viewport).

---

## figure and figcaption

`<figure>` wraps self-contained media.
This can be an image, diagram, code block, etc.

`<figcaption>` adds a visible caption.
It can be placed as the first or last child of `<figure>`.

The two are linked semantically.
No attributes are needed.

---

## video

`<video>` embeds a video player.
Content between the tags shows as fallback if unsupported.

`src` sets the video file.
`width` and `height` set player dimensions.

`controls` shows the built-in play/pause UI.

`autoplay` starts playback immediately.
It usually requires `muted`.

`muted` silences audio by default.

`loop` replays the video continuously.

---

## audio

`<audio>` embeds an audio player.
It does not use `width` or `height`.

`src` sets the audio file.

`controls`, `autoplay`, `muted`, and `loop`
work the same as `<video>`.

---

## iframe

`<iframe>` embeds another HTML page
or external resource inside the current page.

`src` sets the URL.

`title` describes the content for accessibility.
Always include it.

`width` and `height` set frame dimensions.

`scrolling` controls scrollbars:
`yes`, `no`, or `auto`.

`frameborder` sets the border thickness.
Use `0` to remove it.

`sandbox` restricts embedded content.
The value is a space-separated list of permissions
such as `allow-scripts` or `allow-same-origin`.

An empty `sandbox` applies all restrictions.
