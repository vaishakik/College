# -*- coding: utf-8 -*-
"""
Created on Sun Jan 20 13:02:27 2019

@author: vaishak
"""

#Addition of matrices
import numpy as np

print('Enter the sizes of the matrices: ')

print('Enter the size of the first matrix: ')
m1=int(input('Enter the number of rows of the first matrix: '))
n1=int(input('Enter the number of columns of the first matrix: '))

print('Enter the size of the second matrix: ')
m2=int(input('Enter the number of rows of the second matrix: '))
n2=int(input('Enter the number of columns of the second matrix: '))

if(m1!=m2 or n1!=n2):
    print('Addition of matrices of different order is not possible')
else:
    arr1=np.zeros([m1,n1])
    arr2=np.zeros([m2,n2])
    arr3=np.zeros([m1,n1])
    print('Enter the first matrix: ')
    for i in range(m1):
        for j in range(n1):
            arr1[i,j]=int(input())
    print('Enter the second matrix: ')
    for i in range(m2):
        for j in range(n2):
            arr2[i,j]=int(input())
    for i in range(m1):
        for j in range(n1):
            arr3[i,j]=arr1[i,j]+arr2[i,j]
    print('The sum of ',arr1,' and ',arr2,' is : ',arr3)