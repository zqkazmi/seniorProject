"""
This script runs PCA on campusmin data.
"""
import numpy
import sklearn.decomposition
import sklearn.preprocessing


def read_data():
    """Read all of the data from disk."""
    # Read each data file, skipping the first 3 weeks of data
    d1 = numpy.loadtxt('datacleaned.csv', delimiter=',')
    return numpy.concatenate(d1)

def main():
    # Change these
    svd_solver = 'randomized'
    iterated_power = 0
    n_components = None
    num_runs = 1
    print(read_data())
    # Read the data from disk, ignoring the targets, and normalize it
    data = sklearn.preprocessing.normalize(read_data())

    # Used to calculate the average eigenvalues
    total_eigenvalues = 0

    for i in range(num_runs):
        # Run PCA and add the eigenvalues to the total
        pca = sklearn.decomposition.PCA(
            svd_solver=svd_solver,
            iterated_power=iterated_power,
            n_components=n_components)

        pca.fit(data)
        total_eigenvalues += pca.explained_variance_

    # Calculate and print the average eigenvalues
    average_eigenvalues = total_eigenvalues / num_runs

    print('Eigenvalues: ', average_eigenvalues)

if __name__ == '__main__':
    main()