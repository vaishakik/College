# -*- coding: utf-8 -*-
"""
Created on Tue Jan 22 10:45:03 2019

@author: vaishak
"""

#Bisection method to find the roots of the quadratic equation of the form ax^2+bx+c=0.

#Here x is the value of the variable x in the equation ax^2+bx+c=0.
#function(x,a,b,c) returns the value of the function at the value x.
def functional_value(x,a,b,c):
    return (a*x*x+b*x+c)

#Bisection method is the function which is used to find the roots of the quadratic equation.
#Here a,b,c, are the value of the constant in the quadratic equation ax^2+bx+c and (a0,b0) is the initial interval where the roots exists. 
def bisection_method(a,b,c,a0,b0):
    #to find the value of the funtion at a0.
    value_0=functional_value(a0,a,b,c)
    #to find the value of the function at b0.
    value_1=functional_value(b0,a,b,c)
    #to define a variable h to decide when to terminate the loop.
    h=0.000001
    #continue to find the loop till the interval (a0,b0) reaches a minimum value (a0-b0)<h.
    while((abs(a0-b0))>h):
        #to find the value of function at x0=(a0+b0)/2.0
        x0=(a0+b0)/2
        value_mid=functional_value(x0,a,b,c)
        if(value_mid==0):
            return x0
        elif((value_mid*value_0)<0):
            #this means the functional value at a0 and x0 are of opposite sign.
            a0=a0
            value_0=value_0
        else:
            #this means the functional value at a0 and x0 are of same sign.
            #So we should consider the root interval range from(b0,x0)
            a0=b0
            value_0=value_1
        #make bo as x0 and value_1 as value_mid
        b0=x0
        value_1=value_mid
    return x0

print('Bisection method to find the roots of the quadratic equation of the form ax^2+bx+c=0')
print('Enter the value of a,b,c of the quadratic equation ax^2+bx+c=0')
#to input the value of a.
a=float(input('Enter the value of a: '))
#to input the value of b.
b=float(input('Enter the value of b: '))
#to input the value of c.
c=float(input('Enter the value of c: '))
#to take the initial interval range value (a0,b0) where the root lies from the user.
print('Enter the value of a0 and b0 such that their functional value have opposite sign: ')
a0=float(input('Enter the initial value of the initial range where the root lies: '))
b0=float(input('Enter the final value of the initial range where the root lies: '))
#to find the value of the root x using bisection method
x=bisection_method(a,b,c,a0,b0)
print('The roots of the equation ',a,'x^2+',b,'x+',c,'=0',' is : ',x)