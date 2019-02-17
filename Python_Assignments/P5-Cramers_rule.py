# -*- coding: utf-8 -*-
"""
Created on Tue Jan 22 12:46:43 2019

@author: vaishak
"""

#Cramer's rule
import numpy as np
           
print('Enter the number of unknown variables: ')
n=int(input())
#define a coefficient matrix of order n*n since we have n unknowns and n equations.
coeff_matrix=np.zeros([n,n])
#define a value matrix of order n*1 since we have n equations
value_matrix=np.zeros(n)
print('Enter the value of a,b,c,.......d of the equation of the form ax+by+cz+.........=d')
for i in range(n):
    print('Enter the ',i,'th equation: ')
    print('Enter the ',n,' coefficients: ')
    for j in range(n):
        coeff_matrix[i,j]=float(input())
    print('Enter the value of the constant for ',i,' th equatuion: ')
    value_matrix[i]=float(input())

#declare a temporary matrix to change the columns with the value matrix to find value of the unknowns.
temp_matrix=np.zeros([n,n])
#to copy all the rows and columns of coefficient matrix to the temp_matrix
temp_matrix[:,:]=coeff_matrix[:,:]

#determinant of the coefficient matrix.
coeff_det=np.linalg.det(temp_matrix)
#to take the determinant of the temp_matrix to see that we have unique solutions.
if(coeff_det==0):
    print('The system of linear equations do not have unique solution.')
else:
    #to declare a matrix to store the value of the unknowns. Since we have n unknowns the size of the matrix is n.
    res=np.zeros(n)
    for i in range(n):
        #to copy the coefficient matrix into the temporary matrix.
        temp_matrix[:,:]=coeff_matrix[:,:]
        temp_matrix[:,i]=value_matrix
        unknown_det=np.linalg.det(temp_matrix)
        res[i]=unknown_det/coeff_det
    
    print('The value of the unknowns from the given system of linear equations using Cramer\'s rule is: ')
    for i in range(n):
        print('Unknown variable',i,' value : ',res[i])