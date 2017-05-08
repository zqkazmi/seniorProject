## Zahara Kazmi
## Campus Ministry AI
## MLP
#
"This script first cleans and then feature-engineers the data."
"In this file we take the data file and make sure all values acceptable - meaning they must be numeric and if it is numeric, it is added to a new file"
"Otherwise the row is not added." 


import collections
import csv



"Given a value, this method checks if value is numeric or not."
def is_numeric(value):
    """Check whether a value is numeric."""
    try:
        float(value)
        return True
    except ValueError:
        # An exception will be thrown if the value is non-numeric.
        return False
"Check if value is numeric, if it is keep and add to new file other don't add to new file." 
def clean_data(rows):
    """Clean the data by keeping rows that are numeric."""
    # Cleaned rows.
    new_rows = []
    for row in rows:
        # Keep the row if it contains valid team names, valid
        # statistics, and a valid winning team.
        if (is_numeric(row[0])
                and is_numeric(row[1]))\
                and is_numeric(row[2]):
            new_rows.append(row)
    return new_rows



"Write to CSV file method given a file name and a row." 

def write_csv(filename, rows):
    """Write rows of data to a CSV file."""
    with open(filename, 'w') as f:
        writer = csv.writer(f)

        writer.writerows(rows)

"Read in Raw Ddata file, run the cleaning fucntion and and write data to new file called datacleaned." 
def main():
        in_filename = 'rawdata.csv'.format()

        out_filename1 = 'datacleaned.csv'.format()

        with open(in_filename, 'r') as f:
            reader = csv.reader(f)

            # Skip the header.
            next(reader)

            # Clean the data.
            cleaned_rows = clean_data(list(reader))

            # Engineer the features

        # Write the cleaned data to a file.
        write_csv(out_filename1, cleaned_rows)


if __name__ == '__main__':
    main()
