# -*- coding: utf-8 -*-
"""
Created on Sun Jan 20 19:36:23 2019

@author: vaishak
"""

#Writing data to the excel sheet
#xlwt is a module for writing or modifying the data of the excel sheet.
from xlwt import Workbook

#to create a workbook
wb=Workbook()

#to add a sheet to the workbook with name Sheet 1
sheet1=wb.add_sheet('Sheet 1')
sheet1.write(0,0,'Name')
sheet1.write(0,1,'Branch')
sheet1.write(0,2,'Semester')
i=1
while(1):
   print('Enter the student details: ') 
   name=input('Enter the name of the student: ')
   branch=input('Enter the branch of the student: ')
   sem=int(input('Enter the semester of the student: '))
   sheet1.write(i,0,name)
   sheet1.write(i,1,branch)
   sheet1.write(i,2,sem)
   print('Any more student details: ')
   ch=input('Press Y-> to continue \n   N-> to exit\n')
   if(ch=='N' or ch=='n'):
       break
   i=i+1
print('Student record successfully taken')
wb.save('Student.xls')
print('Student record successfully saved')