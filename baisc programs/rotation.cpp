// A Dynamic Programming based solution that uses table C[][] to
// calculate the Binomial Coefficient
#include <cstdlib>
#include <iostream>

using namespace std;

// Prototype of a utility function that returns minimum of two integers
int main()
{
 int a[]={4,5,6,7,8,3};
 int size=sizeof(a)/ sizeof(a[0]); 
 int high=size-1;
 int low=0;
 int middle=(low+high)/2;
 
 while(low<=high){
     if(!(a[middle-1]<a[middle] && a[middle]<a[middle+1])){
         if(a[middle]>a[middle+1]){
             middle++;
         }
         cout<< "Rotation is at = "<<middle<<" and smalles no is "<<a[middle];
         return 0;
     }
     if(a[low]>a[high]){
         if(a[middle]<a[low]){
             high=middle;
         }else{
             low=middle;
         }
         middle=(low+high/2);
     }else{
         cout<<"no rotation";
         return 0;
     }
 }
}