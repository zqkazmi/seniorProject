## Zahara Kazmi
## Campus Ministry AI
## MLP
#
"This script first cleans and then feature-engineers the data."



import collections
import csv




def is_numeric(value):
    """Check whether a value is numeric."""
    try:
        float(value)
        return True
    except ValueError:
        # An exception will be thrown if the value is non-numeric.
        return False

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




def write_csv(filename, rows):
    """Write rows of data to a CSV file."""
    with open(filename, 'w') as f:
        writer = csv.writer(f)

        writer.writerows(rows)


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