# -*- coding: utf-8 -*-
"""
Created on Tue Jan 22 15:02:34 2019

@author: vaishak
"""

#Newton Raphson's method to solve a quadratic equation.

#to find the functional value of the quadratic equation of the form ax^2+bx+c=0 at x.
def functional_value(x,a,b,c):
    return(a*x*x+b*x+c)
    
#to find the derivative of the function ax^2+bx+c=0.
def derivative_function(x,h,a,b,c):
    return((functional_value(x+h,a,b,c)-functional_value(x,a,b,c))/h)

#function to find the approximate root using Newton Raphson's method.
def newton_raphson_method(a,b,c):
    #to assume the initial approximate root.
    x0=7
    #to decide a threshold to decide to terminate if the previous root and the new root coincide (x0-x1)<h.
    h=0.000001
    x1=x0-(functional_value(x0,a,b,c)/derivative_function(x0,h,a,b,c))
    #x0 is previous root and x1 is the new root.
    while(abs(x0-x1)>h):
        #to assign the old root with the new root value
        x0=x1
        x1=x0-(functional_value(x0,a,b,c)/derivative_function(x0,h,a,b,c))
    return x1    

print('Newton Raphson\'s  method to find the root of a quadratic equation of the form ax^2+bx+c=0')
print('Enter the value of a,b,c of the equation of the form ax^2+bx+c=0')
a=float(input('Enter the value of a: '))
b=float(input('Enter the value of b: '))
c=float(input('Enter the value of c: '))
#to call the function newton_raphson_method() to find the root of the equation.
x=newton_raphson_method(a,b,c)
print('The approximate root of the equation ',a,'x^2+',b,'x+',c,'=0 is',x)
