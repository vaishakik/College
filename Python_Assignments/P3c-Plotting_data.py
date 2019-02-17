# -*- coding: utf-8 -*-
"""
Created on Sun Jan 20 20:38:45 2019

@author: vaishak
"""

import xlrd
import matplotlib.pyplot as plt
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

x=[]
y=[]
for i in range(0,rows):
    for j in range(1,cols):
        value=sheet.cell_value(i,j)
        if(i==0):
            x.append(value)
        elif(i==1):
            y.append(value)
            
plt.subplot(3,1,1)            
plt.plot(x,y)
plt.xlabel('x axis')
plt.ylabel('y axis')
plt.title('Line graph')
plt.tight_layout()

plt.subplot(3,1,2)
plt.bar(x,y)
plt.xlabel('x axis')
plt.ylabel('y axis')
plt.title('Bar graph')
plt.tight_layout()

plt.subplot(3,1,3)
plt.scatter(x,y)
plt.xlabel('x axis')
plt.ylabel('y axis')
plt.title('Scatter graph')
plt.tight_layout()