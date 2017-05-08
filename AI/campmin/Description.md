# Machine Learning Algorithm
## How to Run: 
The files need to be run in this order: 
1. Run Data Query 
2. Run Data Preprocessing 
3. Run MLP - PCA is run within MLP file. 
## Data Query 
The data query retrieves data from database and saves it to a csv file called rawdata.csv. 

## Preprocessing
The file will take in the raw data and check for faults. This script reads in data and cleans it by checking if the values are numeric - if they are it will add to to cleaned data file otherwise it will not be added. 
## MLP-PCA 
The MLP script runs MLP and PCA on the cleaned data. It reads in data, normalizes it and then runs PCA. Running the PCA within this file allows us to use the function to pick on its own how many features to keep and we don't have to decide on how many features to keep. Finally after PCA is complete, we run MLP on the data and get our average accuracy. We can use the predict function to give it an attendance and it will return when and what time in numeric values the attendance should fit at. 
