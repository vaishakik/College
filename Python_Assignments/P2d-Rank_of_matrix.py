# -*- coding: utf-8 -*-
"""
Created on Sun Jan 20 16:46:23 2019

@author: vaishak
"""

#Rank of the matrix

import numpy as np

print('Enter the size of the matrix: ')
m=int(input('Enter the number of rows of the matrix: '))
n=int(input('Enter the number of columns of the matrix: '))
print('Enter the matrix elements: ')
arr=np.zeros([m,n])
for i in range(m):
    for j in range(n):
        arr[i,j]=int(input())
r=np.linalg.matrix_rank(arr)
print('Rank of the matrix: ',r)        