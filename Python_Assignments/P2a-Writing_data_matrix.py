# -*- coding: utf-8 -*-
"""
Created on Sun Jan 20 10:44:18 2019

@author: vaishak
"""

#Program for writing data into a matrix of given size
import numpy as np

print('Enter the size of the matrix: ')
m=int(input('Enter the number of rows of a matrix: '))
n=int(input('Enter the number of columns of a matrix: '))
arr=np.zeros([m,n])
for i in range(m):
    for j in range(n):
        arr[i,j]=int(input())
print('Matrix is: ')       
print(arr)        