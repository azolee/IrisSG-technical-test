## Task Name: Excel Sheet Column Letter to Column Number And Vice Versa.

Pick from C#, JavaScript or PHP to complete this task, it can be done in any IDE.

1. __PART 1__: Given a string (columnTitle) that represents the column title as it appears in an Excel sheet, return its corresponding column number.

Example:

| Input | Output |
|-------|--------|
| A     | 1      |
| B     | 2      |
| C     | 3      |
| Z     | 26     |
| AA    | 27     |
| AB    | 28     |

2. __PART 2__: Given a positive number, convert the number to the corresponding Excel column name.

Example:

| Input | Output |
|-------|--------|
 | 26    | Z      |
 | 51    | AY     |
 | 52    | AZ     |
 | 80    | CB     |
 | 676   | YZ     |
 | 702   | ZZ     |
 | 705   | AAC    |


## Usage

### Test from console 
```shell
php ./index.php A 1 76 AAZ 
```

### Run test

```shell
./vendor/bin/phpunit ./tests/ExcelConverter/*
```