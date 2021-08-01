
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

If this file is missing, Bob will resort to the `BOBPATH`
environment variable. If this is missing, Bob will use
hard wired defaults.

It's possible if any of these do not match the actual folder
layout, Bob may not be able to locate files that it needs
for project.

---