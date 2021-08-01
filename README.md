# BOB-Runtime

Runtime environment for BOB-Original.

This project contains the folder layout and initial files
to setup a working copy of Bob on a local machine.

This includes a working copy of the binary executable
named `bob`. It also contains things like textures and
examples for using various Bob features.

# Updates

Updating the executable to the latest stable version
requires cloning the `BOB-Original` repository and
doing a rebuild using GCC.

```
git clone https://github.com/NyteOwlDave/BOB-Original.git
```

---

# Help System

The help sytem for Bob is contained in a separate repo.
It is HTML-based and written in markdown.

```
git clone https://github.com/NyteOwlDave/BOB-Help.git
```

In order for this to work properly, you'll need to build
the project, then copy it into a folder that your web
server can expose to the public.

For example, a common arrangment the Apache web server
on Ubuntu is `/var/www/html`. So you might copy the
compiled help system to this folder:

```
/var/www/html/bob/help
```

The would expose the help system via localhost as follows:

```
http://localhost/bob/help
```

# Tools

See the README.md file in the `tools` folder.

I've also written a collection of graphics tools as a companion
to Bob. These tools have their own repository:

```
git clone https://github.com/NyteOwlDave/BOB-Tools.git
```

This is a collection of scripts and binary executables written
in a variety of languages.

---

