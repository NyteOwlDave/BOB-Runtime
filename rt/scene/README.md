
# Scene Folder

The `scene` folder is where scene files are kept.

A scene is a fully described environment for rendering a plate.

A scene should begin with a `studio` structure or an include
to one in a `studio` file.

Example:

```
#include my-cool-studio.studio
```

It's fairly common to include color definitions up front as well.

```
#include my-cool-colors.bc
#include my-cool-studio.studio
```

---

