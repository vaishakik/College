# -*- coding: utf-8 -*-
"""
Created on Tue Jan 22 08:55:18 2019

@author: vaishak
"""

import xlrd
import numpy as np

#Filename of the excel sheet
filename='Plotting_data.xlsx'
#To open the workbook
book=xlrd.open_workbook(filename)
#to read the data from sheet 1(first sheet of the book)
sheet=book.sheet_by_index(0)

#number of rows of the excel sheet
rows=sheet.nrows
#number of columns of the excel sheet
cols=sheet.ncols

#matrix to store all the values of the excel sheet
#Here number of rows=rows and number of columns=cols-1 since first column has the variables name.
arr=np.zeros([rows,cols-1])

for i in range(0,rows):
    for j in range(1,cols):
        value=sheet.cell_value(i,j)
        arr[i,j-1]=value
        
print('The values in the excel sheet are: ')
print(arr)

#To find the mean, median and standard deviation of the rows in the excel sheet
arr_row=np.zeros([1,cols-1])
for i in range(0,rows):
    arr_row=arr[i,:]
    mean=np.mean(arr_row)
    median=np.median(arr_row)
    std=np.std(arr_row)
    print('The mean, median and standard deviation of the ',i,'th row is: ',mean,',',median,',' ,std)

print("\n")

#To find the mean, median and standard deviation of the columns in the excel sheet
arr_cols=np.zeros([rows,1])
#Starting from 1st column since zeroth column contains the varaibles name.
for j in range(0,cols-1):
    arr_cols=arr[:,j]
    mean=np.mean(arr_cols)
    median=np.median(arr_cols)
    std=np.std(arr_cols)
    print('The mean, median and standard deviation of the ',j,'th column is: ',mean,',',median,',',std)