public class parantesis {
    public static void main(String[] args) {
        parentesis(3);
    }

    public static void parentesis(int n){
        for (int m=0;m<n;m++){
            if (m+1<n){
                for(int k=0;k<m+1;k++){
                    for(int i =0;i<n-m;i++){
                        System.out.print("{");
                        parentesis(m);
                        System.out.print("}");
                    }
                    System.out.print(',');
                }
            }else {
                for (int i = 0; i < n - m; i++) {
                    System.out.print("{");
                    System.out.print("}");
                }
                //System.out.print(',');
            }
        }
    }
}
