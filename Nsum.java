import java.util.Scanner;
public class Nsum
{
public static void main(String []args)
{
	int l;

	Scanner kb=new Scanner(System.in);
	System.out.println("Enter the value OF N ");
	int n=kb.nextInt();
	for(l=1;l<=n;l++)
	System.out.println("N natural no is" +l);
}
}