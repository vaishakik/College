# -*- coding: utf-8 -*-
"""
Created on Wed Jan 16 20:51:57 2019

@author: vaishak
"""

def addition(x,y):
    c=x+y
    print('The sum of ',x,' and ',y,' = ',c)
    
def subtraction(x,y):
    c=x-y
    print('The difference of ',x,' and ',y,' = ',c)

def multiplication(x,y):
    c=x*y
    print('The product of ',x,' and ',y,' = ',c)

def division(x,y):
    if(y==0):
        print('Division error')
    else:
        c=x/y
        print('The division of ',x,' and ',y,' = ',c)
        
while(1):
    print('Enter the choice: ')
    print('1->Addition\n2->Subtraction\n3->Multiplication\n4->Division\n5->Exit')
    choice=int(input())
    if((choice>=0 and choice<5)):
         a=int(input('Enter the number x: '))
         b=int(input('Enter the number y: '))
    if(choice==1):
        addition(a,b)
    elif(choice==2):
        subtraction(a,b)
    elif(choice==3):
        multiplication(a,b)
    elif(choice==4):
        division(a,b)
    elif(choice==5):
        break
    else:
        print('Invalid choice')

        