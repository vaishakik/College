# -*- coding: utf-8 -*-
"""
Created on Sun Jan 20 11:55:04 2019

@author: vaishak
"""

#Reading a matrix to a row vector
import numpy as np

print('Enter the size of a matrix: ')
a=int(input('Enter the number of rows of a matrix: '))
b=int(input('Enter the number of columns of a matrix: '))
#defining a matrix
arr=np.zeros([a,b])
#defining a row vector
row_vect=np.zeros([1,b])
for i in range(a):
    print('Enter the ',i+1 ,'row vector of the matrix : ')
    for j in range(b):
        row_vect[0,j]=int(input())
    arr[i,:]=row_vect
print('Matrix: ')    
print(arr)