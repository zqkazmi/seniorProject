## Zahara Kazmi
## Campus Ministry AI
## MLP

import numpy
import sklearn.decomposition
import sklearn.neural_network

" Read in data from datacleaned file."
def read_data():
    """Read all of the data from disk."""
    # Read each data file,
    d1 = numpy.loadtxt('datacleaned.csv', delimiter=',')
    return d1

"Run MLP with activation function logictis, learning rate to be adaptive and hidden layer size of 10, no early stopping and predict for 25"
def main():
    # Change these
    activation = 'logistic'
    learning_rate = 'adaptive'
    hidden_layer_sizes = (10,)
    early_stopping = False
    num_runs = 1
    myArray=[25]

    # Read the data from disk
    data = read_data()
    # Normalize the data
    normalized = sklearn.preprocessing.normalize(data)

    # Run PCA and transform the data - running Full and MLE will choose how many features to keep on their own. 
    pca = sklearn.decomposition.PCA(svd_solver='full',
            n_components='mle')
    pca.fit(normalized)
    transformed = pca.transform(normalized)

    # Split the data into training (90%) and testing (10%) data
    split_point = int(len(data) * .9)

    train = transformed[:split_point, :2]
    train_target = data[:split_point, 2]

    test = transformed[split_point:, :2]
    test_target = data[split_point:, 2]

    # Used to calculate the average accuracy
    total_accuracy = 0

    for i in range(num_runs):
        # Run the MLP and calculate its accuracy
        mlp = sklearn.neural_network.MLPClassifier(
            activation=activation,
            learning_rate=learning_rate,
            hidden_layer_sizes=hidden_layer_sizes,
            early_stopping=early_stopping)

        net = mlp.fit(train, train_target)
        predictions = net.predict(test)
        score = net.score(test, test_target)

        # Add the accuracy to the total
        total_accuracy += score

    # Calculate and print the average accuracy
    average_accuracy = total_accuracy / num_runs

    resultY=mlp.predict(myArray)
    print('Accuracy: ', average_accuracy)
    print('Result for Prediction: ', resultY)


if __name__ == '__main__':
    main()
