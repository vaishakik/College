# -*- coding: utf-8 -*-
"""
Created on Sun Jan 20 15:26:39 2019

@author: vaishak
"""

#Multiplication of matrices
import numpy as np

print('Enter the sizes of the matrices: ')

print('Enter the size of the first matrix: ')
m1=int(input('Enter the number of rows of the first matrix: '))
n1=int(input('Enter the number of columns of the first matrix: '))

print('Enter the size of the second matrix: ')
m2=int(input('Enter the number of rows of the second matrix: '))
n2=int(input('Enter the number of columns of the second matrix: '))

if(n1!=m2):
    print('Multiplication of matrices not possible.')
    print('Number of columns of first matrix should be equal to number of rows of second matrix. ')
else:
    arr1=np.zeros([m1,n1])  
    arr2=np.zeros([m2,n2])
    arr3=np.zeros([m1,n2])
    print('Enter the first matrix: ')
    for i in range(m1):
        for j in range(n1):
            arr1[i,j]=int(input())
    print('Enter the second matrix: ')
    for i in range(m2):
        for j in range(n2):
            arr2[i,j]=int(input())
    for i in range(m1):
        for j in range(n2):
            sum=0
            for k in range(n1):
                sum=sum+arr1[i,k]*arr2[k,j]
            arr3[i,j]=sum
    print('The product of ',arr1,' and ',arr2,' is :', arr3)        