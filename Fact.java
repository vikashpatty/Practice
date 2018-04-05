import java.util.Scanner;
public class Fact

{
public static void main(String []args)
{
	
	Scanner kb=new Scanner(System.in);
	System.out.println("enter value of a");
	int a=kb.nextInt();
	int b=1;
	while(a!=0)
	{
	b=b*a;
	a--;
	}
	System.out.println("the factorial of is" +a);
	}
}
