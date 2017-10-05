/* 
 * File:   main.cpp
 * Author: zrt1992
 *
 * Created on September 11, 2017, 10:52 PM
 */

#include <cstdlib>
#include <iostream>

using namespace std;

/*
 * 
 */
int partition(int a[],int p,int r);
int quicksort(int a[],int p,int r);

int main(int argc, char** argv) {
      int a[]={3,1,23,34,234};
    quicksort(a,0,(sizeof(a)/4)-1);
    int i=0;
    for( i=0;i<=(sizeof(a)/4)-1;i++){
        cout<<a[i]<<" ";
    }
    return 0;
}
int quicksort(int a[],int p,int r){
    if(p<r){
        int q=partition(a,p,r);
        quicksort(a,p,q-1);
        quicksort(a,q+1,r);
    }
}
int partition(int a[],int p,int r){
    int x=a[r];
    int temp=0;
    int i=p-1;
    for (int j=p;j<=r-1;j++){
        if(a[j]<=x){
            i++;
            temp=a[i];
            a[i]=a[j];
            a[j]=temp;
            
        }
    }
 
    temp=a[i+1];
            a[i+1]=a[r];
            a[r]=temp;
            return i+1;
}

