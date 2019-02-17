# -*- coding: utf-8 -*-
"""
Created on Sun Jan 20 09:46:13 2019

@author: vaishak
"""

def addition(x,y):
    c=x+y
    return c

def subtraction(x,y):
    c=x-y
    return c

def multiplication(x,y):
    c=x*y
    return c   

def division(x,y):
    if(y==0):
       return 'Division error'
    c=x/y
    return c    

def stop():
    return 'stop'

def calculator(i,a,b):
    switcher={1:addition(a,b),
              2:subtraction(a,b),
              3:multiplication(a,b),
              4:division(a,b),
              5:stop()
              }      
    func=switcher.get(choice,'Invalid choice')        
    return func   
    
    
while(1):
    print('Enter the choice: ')
    print('1->Addition\n2->Subtraction\n3->Multiplication\n4->Division\n5->Exit')
    choice=int(input())
    if((choice>=0 and choice<5)):
         a=int(input('Enter the number x: '))
         b=int(input('Enter the number y: '))
    res=calculator(choice,a,b)
    if(res=='stop'):
        break
    print(res)