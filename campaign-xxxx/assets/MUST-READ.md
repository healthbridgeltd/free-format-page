# Please Remember:

All assets in the folder **MUST** be referenced absolutely
including the domain `fractl.zavamed.com`. These also need to be `https:`.

Example:
```html
<link rel="stylesheet" href="https://fractl.zavamed.com/campaign-xxxxx/assets/campaign-specific.css">
```

This will **not work** in production:
```html
No:
<link rel="stylesheet" href="/campaign-xxxxx/assets/campaign-specific.css">

Nope:
<link rel="stylesheet" href="assets/campaign-specific.css">

And this also not (www instead of fractl):
<link rel="stylesheet" href="https://www.zavamed.com/campaign-xxxxx/assets/campaign-specific.css">
```

