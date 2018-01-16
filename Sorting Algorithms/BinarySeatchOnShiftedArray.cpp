/* 
 * File:   BinarySeatchOnShiftedArray.cpp
 * Author: zrt1992
 *
 * Created on October 18, 2017, 9:44 PM
 */

#include <cstdlib>
#include <iostream>

using namespace std;

/*
 * 
 */
int findPivot(int arr[],int size){
    int start=0;
    int end=size-1;
    int mid=(start+end)/2;
    while(start<=end){
        if(arr[mid]>arr[mid+1]) return mid+1;        
        if(arr[start]<=arr[mid]){
            start=mid+1;
        }else{
            end=mid-1;
        }
    }
    
}
int BinarySearching(int arr[],int low, int max, int element)
{
      int  high = max - 1, middle;
      while(low <= high)
      {
            middle = (low + high) / 2;
            if(element > arr[middle])
                  low = middle + 1; 
            else if(element < arr[middle])
                  high = middle - 1; 
            else
                  return middle;
      }
      return -1;
}
int checkRotation(int arr[],int size){
    if(arr[0]>arr[size-1]){
        return true;
    }else{
        return false;
    }
    
    
}
int main(int argc, char** argv) {
     //suppose we have int a=[1,2,3,4,5,6] this sorted array and some how it shifts
    int a[]={4,5,6,7,1,2,3}; //how to find this in O(logn) time
    int n=5; //not to be searched
     // the trick here is to find  the shifted offset so if we can find the index of 1 thats the pivot
    int size=sizeof(a)/4;  
    if(checkRotation(a,size)){
        int low=0;
        int high=0;
        int pivot=findPivot(a,size);
        
        if(n<=a[pivot]){
             
            low=0;
            high=pivot;
           
        }else{
           
            low=0;    
            high=size;
        }
        
               
        cout<<BinarySearching(a,low,high,n);
    }else{
        cout <<"Array is Not Rotated";
    }
    
    

    return 0;
}

