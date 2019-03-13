import java.util.Scanner;

public class CalcularElementos{
    public static void main(String[] args) {
        String cadena;
        int valor;
        cadena palabra=new cadena();
        Scanner sc=new Scanner(System.in);

        System.out.print("Ingrese la cadena: ");
        palabra.setCadena(sc.nextLine());
        valor=palabra.getCadena().length();
        System.out.println(valor);
    }
}