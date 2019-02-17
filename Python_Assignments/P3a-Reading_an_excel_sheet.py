# -*- coding: utf-8 -*-
"""
Created on Sun Jan 20 18:14:04 2019

@author: vaishak

"""

import xlrd

#Filename of the excel sheet
filename='Book1.xlsx'
#To open the workbook
book=xlrd.open_workbook(filename)
#to read the data from sheet 1(first sheet of the book)
sheet=book.sheet_by_index(0)

#number of rows of the excel sheet
rows=sheet.nrows
#number of columns of the excel sheet
cols=sheet.ncols

arr1=[]
arr2=[]
for i in range(0,rows):
    for j in range(0,cols):
        value=sheet.cell_value(i,j)
        if(j==0):
            arr1.append(value)
        elif(j==1):
            arr2.append(value)
          
print('The first column of the excel sheet: ')            
print(arr1)
print('The second column of the excel sheet: ')
print(arr2)