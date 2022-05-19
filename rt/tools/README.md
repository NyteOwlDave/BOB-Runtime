
# Tools

Bob itself is just the ray tracer. Yet it comes with a variety
of tools intended to simplify various tasks.

The tools have their own repository:

```
git clone https://github.com/NyteOwlDave/BOB-Tools.git
```

This is a collection of scripts and binary executables written
in a variety of languages.

This folder does not contain source code or build information.
It contains only the most recent stable build of those tools.

# Bitmap Header

Shows the header for a Windows Bitmap (BMP file format).

```
./bmpdr [flags] <bmp-file>
```

# Chum

Converts an image from one format to another.

```
./chum <infile> <outfile>
```

Shows the header for an image file.

```
./chum <infile>
```

# Circle.Geo

Generates the point list for a regular polygon (crude circle) in 3D.

```
./circle.geo <radius> <num-points>
```

# Color Map

Converts a color map (palette) from one format to another.

```
./cmap <infile> <outfile> <flags>
```

Lists a color map to the screen in MAP format.

Flags determine the output format:

| Flag | Format |
|-|-|
| none | Bob MAP file |
| -c | C source code |
| -j | JSON source code


```
./cmap <infile>
```

Shows the header for a color map.

```
./cmap -h <infile>
```

Creates a preview pixmap.

```
./cmap -v <infile>
```

# Filter

Passes an image (IMG file format) through a box filter.
This is an anti-aliasing technique.

```
./filter [-f <filt_file>] -i <input_file> -o <output_file>
```

Filter files are stored in the `flt` folder.

# Optimal Palette

Creates an optimal palette for a true color image.

```
./optpal <infile>
```

# Preview

Converts a file to PPM format then invokes a third party
file viewer to examine it.

```
./preview <infile>
```

Requires that `chum` be in the same folder.

Generates a file named `_.ppm` from the input image.

This is a `bash` script and is easily programmable. The file
viewer was chosen for Ubuntu 18.04 LTS. Other systems may
require a different viewer.

The o/o image filename is easily configurable as well.

# Star.Geo

Generates the point list for a 2D star.

```
./star.geo <inner> <outer> [<numpoints>]
```

`<inner>` is the inner radius.

`<outer>` is the outer radius.

`<numpoints>` is the number of points.

---

