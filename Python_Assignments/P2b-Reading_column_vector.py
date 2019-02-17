# -*- coding: utf-8 -*-
"""
Created on Sun Jan 20 12:41:38 2019

@author: vaishak
"""

#Reading a matrix to a column vector
import numpy as np

print('Enter the size of a matrix: ')
a=int(input('Enter the number of rows of a matrix: '))
b=int(input('Enter the number of columns of a matrix: '))
#defining a matrix
arr=np.zeros([a,b])
#defining a column vector
col_vect=np.zeros(a)
for i in range(b):
    print('Enter the ',i+1 ,'column vector of the matrix : ')
    for j in range(a):
        col_vect[j]=int(input())
    arr[:,i]=col_vect
print('Matrix: ')    
print(arr)