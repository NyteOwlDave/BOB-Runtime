
# Runtime Folder

The `rt` folder contains the runtime environment that Bob requires
to operate properly.

This includes binaries as well as resources and projects.

# Bob Binary

The ray tracer binary is named `bob`. You'll invoke `bob` to
render scenes.

# Bob Path

The `bobpath` file contains a list of subfolders for bob to
search when it needs a source file, such as an included file
or a texture image.

If this file is missing, Bob will resort to the `BOB`
environment variable. If this is missing, Bob will use
hard wired defaults.

It's possible if any of these do not match the actual folder
layout, Bob may not be able to locate files that it needs
for project.

# Search Path Limit

You can edit the `bobpath` file to put more folders into
the search path. The limit is 32.

You can also delete `bobpath` and edit the `BOB` environment
variable instead. The limit is the same -- 32 folders.

# BOB Environment Variable

This should go without saying for experiences Linux users,
but we'll mention it here anyway, because it can be a gotcha.

In a Linux environment, the variable must be define with the
`export` option or Bob will not see it.

```
export BOB=scene;img;map;obj[;...]
bob myscene.scene
```

Notice folder names are separated by a semicolon. The `[;...]`
indicated you can add more names using the same pattern.

---
