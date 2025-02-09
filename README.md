# PHP Loose Comparison Masking Division by Zero Errors

This repository demonstrates a subtle bug in PHP code where loose comparison (`==`) can mask division by zero errors.  The code uses `==` to check for zero values, but this does not reliably catch cases where a variable is considered numerically equal to zero (e.g., an empty string). Using strict comparison (`===`) is recommended to prevent unexpected behavior and ensure that division-by-zero errors are properly handled.

The bug and solution are presented in separate PHP files.