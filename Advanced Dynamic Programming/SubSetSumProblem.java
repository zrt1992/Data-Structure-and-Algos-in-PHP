/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package subsetsumproblem;

/**
 *
 * @author zrt1992
 */
public class SubSetSumProblem {

    /**
     * @param args the command line arguments
     */
    public static void subSetProblem(int a[], int n, int sum) {

        int matrix[][] = new int[n+1][sum + 1];
        for (int i = 0; i <= n; i++) {

            matrix[i][0] = 1;
           

        }
   
        for (int i = 1; i <= n; i++) {
            for (int j = 0; j <= sum; j++) {
               if(matrix[i-1][j]==1){
                   matrix[i][j]=1;
               }else{
                    matrix[i][j]= matrix[i-1][j-a[i-1]];
               }
                   
               
                
            }
             
            }
        
        for (int i = 1; i <= n; i++) {
            for (int j = 0; j <= sum; j++) {
               System.out.print("("+i+","+j+")");
                System.out.print(" "+matrix[i][j]+" ");

           
            }
             System.out.print("\n");
        }


    }

    public static void main(String[] args) {

        int a[] = {1, 2, 3, 4, 5};
        int sum =16 ;
       
        SubSetSumProblem.subSetProblem(a, a.length, sum);

    }

}
