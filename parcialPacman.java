import java.util.Scanner;
import java.util.Random;

public class parcialPacman{

    public static void main(String[] args){
        int[][] elMapa ={
			{1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1},
			{1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1},
			{1,0,1,1,1,1,0,1,1,1,1,1,0,1,1,1,1,0,1,1,1,1,0,1},
			{1,0,1,2,2,1,0,1,2,2,2,1,0,1,2,2,1,0,1,2,2,1,0,1},
			{1,0,1,1,1,1,0,1,1,1,1,1,0,1,1,1,1,0,1,1,1,1,0,1},
			{1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1},
			{1,0,1,1,1,1,0,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,0,1},
			{1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1},
			{1,1,1,1,1,1,0,1,1,1,1,1,1,1,1,1,1,0,0,1,1,1,1,1},
			{1,2,2,2,2,1,0,0,0,0,0,0,0,0,0,0,0,0,0,1,2,2,2,1},
			{1,2,2,2,2,1,0,1,1,2,2,2,2,2,2,1,1,0,0,1,2,2,2,1},
			{1,2,2,2,2,1,0,1,2,2,2,2,2,2,2,2,1,0,0,1,2,2,2,1},
			{1,1,1,1,1,1,0,1,2,2,2,2,2,2,2,2,1,0,0,1,1,1,1,1},
			{1,0,0,0,0,0,0,1,2,2,2,2,2,2,2,2,1,0,0,0,0,0,0,1},
			{1,0,0,0,1,0,0,1,1,1,1,1,1,1,1,1,1,0,0,1,0,0,0,1},
			{1,0,0,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,0,0,1},
			{1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1},
			{1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1},
			{1,0,1,1,1,1,0,1,1,1,1,1,0,1,1,1,1,0,1,1,1,1,0,1},
			{1,0,1,2,2,1,0,1,2,2,2,1,0,1,2,2,1,0,1,2,2,1,0,1},
			{1,0,1,1,1,1,0,1,1,1,1,1,0,1,1,1,1,0,1,1,1,1,0,1},
			{1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1},
			{1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1},			

        };

        int[] elPersonaje = {2,1};
        int[] fantasma1 = {12,2};
		int[] fantasma2 = {10,12};
        do {
			imprimeMapa(elMapa, elPersonaje, fantasma1, fantasma2);
			int direccion1 = (int)(Math.random()*4+1);
			int direccion2 = (int)(Math.random()*4+1);
			movimientoFantasma1(elMapa, fantasma1, direccion1);
			movimientoFantasma2(elMapa, fantasma2, direccion2);

			if (elPersonaje[0] == fantasma1[0] && elPersonaje[1] == fantasma1[1]) {
				System.out.print("Perdiste, que triste jajaja");
				break;
			}
            
		} while (movimientoPacman(elMapa, elPersonaje));
    }

    private static void dibujaPersonaje() {

		System.out.print("UwU");

	}

	private static void dibujaFantasma() {

		System.out.print("*o*");

	}

    private static boolean movimientoPacman(int[][] elMapa, int[] pacman) {

		Scanner entrada = new Scanner(System.in);
		String inputUsuario;
		String laDireccion="";

		inputUsuario = entrada.nextLine();

		if (inputUsuario.equals("w")) {laDireccion="ARRIBA";} else
		if (inputUsuario.equals("a")) {laDireccion="IZQUIERDA";} else
		if (inputUsuario.equals("s")) {laDireccion="ABAJO";} else
		if (inputUsuario.equals("d")) {laDireccion="DERECHA";} 

		moverPersonaje(pacman, elMapa, laDireccion);
		return true;
	}

	private static boolean movimientoFantasma1(int[][] elMapa, int[] fantasma1, int direccion) {

		moverFantasma1(fantasma1, elMapa, direccion);
		return true;
	}

	private static boolean movimientoFantasma2(int[][] elMapa, int[] fantasma2, int direccion) {

		moverFantasma2(fantasma2, elMapa, direccion);
		return true;
	}

    private static void moverPersonaje(int[] pacman, int[][] elMapa, String unaDireccion ){

		if (unaDireccion=="IZQUIERDA")
		{

			if (pacman[0] == 0) 
			{ 

				pacman[0] = elMapa[0].length - 1; 
				
			} 

			else if  (elMapa[pacman[1]][pacman[0] - 1] % 2 == 0) 
			{ 
				pacman[0] -= 1; 
				elMapa[pacman[1]][pacman[0]] = 2;
			}

		} else if (unaDireccion=="ARRIBA") 
		{

			if (pacman[1] == 0) 
			{
				pacman[1] -= 1;
			} 

			else if  (elMapa[pacman[1] - 1][pacman[0]] % 2 == 0) 
			{
				pacman[1] = pacman[1] - 1; 
				elMapa[pacman[1]][pacman[0]] = 2;
			}

		} else if (unaDireccion=="DERECHA") 
		{
			if (pacman[0] == elMapa[0].length - 1) 
				{
					pacman[0] = 0;
				} 
			else if  (elMapa[pacman[1]][pacman[0] + 1] % 2 == 0) 
			{ 
				pacman[0] += 1; 
				elMapa[pacman[1]][pacman[0]] = 2;
			}

		} else if (unaDireccion=="ABAJO") 
		{
			if (pacman[1] == elMapa.length - 1) 
			{
				pacman[1] = 0;
			} 

			else if  (elMapa[pacman[1] + 1][pacman[0]] % 2 == 0) 
			{ 
				pacman[1] += 1; 
				elMapa[pacman[1]][pacman[0]] = 2;
			}
		}
	}

	private static void moverFantasma1(int[] fantasma1, int[][] elMapa, int direccion ){

		if (direccion == 1)
		{

			if (fantasma1[0] == 0) 
			{ 

				fantasma1[0] = elMapa[0].length - 1; 
			} 

			else if  (elMapa[fantasma1[1]][fantasma1[0] - 1] % 2 == 0) 
			{ 
				fantasma1[0] -= 1; 
			}

		} else if (direccion == 2) 
		{

			if (fantasma1[1] == 0) 
			{
				fantasma1[1] -= 1;
			} 

			else if  (elMapa[fantasma1[1] - 1][fantasma1[0]] % 2 == 0) 
			{
				fantasma1[1] = fantasma1[1] - 1; 
			}

		} else if (direccion == 3) 
		{
			if (fantasma1[0] == elMapa[0].length - 1) 
				{
					fantasma1[0] = 0;
				} 
			else if  (elMapa[fantasma1[1]][fantasma1[0] + 1] % 2 == 0) 
			{ 
				fantasma1[0] += 1; 
			}

		} else if (direccion == 4) 
		{
			if (fantasma1[1] == elMapa.length - 1) 
			{
				fantasma1[1] = 0;
			} 

			else if  (elMapa[fantasma1[1] + 1][fantasma1[0]] % 2 == 0) 
			{ 
				fantasma1[1] += 1; 
			}
		}
	}

	private static void moverFantasma2(int[] fantasma2, int[][] elMapa, int direccion ){

		if (direccion == 1)
		{

			if (fantasma2[0] == 0) 
			{ 

				fantasma2[0] = elMapa[0].length - 1; 
			} 

			else if  (elMapa[fantasma2[1]][fantasma2[0] - 1] % 2 == 0) 
			{ 
				fantasma2[0] -= 1; 
			}

		} else if (direccion == 2) 
		{

			if (fantasma2[1] == 0) 
			{
				fantasma2[1] -= 1;
			} 

			else if  (elMapa[fantasma2[1] - 1][fantasma2[0]] % 2 == 0) 
			{
				fantasma2[1] = fantasma2[1] - 1; 
			}

		} else if (direccion == 3) 
		{
			if (fantasma2[0] == elMapa[0].length - 1) 
				{
					fantasma2[0] = 0;
				} 
			else if  (elMapa[fantasma2[1]][fantasma2[0] + 1] % 2 == 0) 
			{ 
				fantasma2[0] += 1; 
			}

		} else if (direccion == 4) 
		{
			if (fantasma2[1] == elMapa.length - 1) 
			{
				fantasma2[1] = 0;
			} 

			else if  (elMapa[fantasma2[1] + 1][fantasma2[0]] % 2 == 0) 
			{ 
				fantasma2[1] += 1; 
			}
		}
	}

    private static void imprimeMapa(int[][] mapa, int[] pacman, int[] fantasma1, int[] fantasma2) {

		for (int y = 0; y < mapa.length; y++) 
		{
			for (int x = 0; x < mapa[y].length; x++) 
			{
                if (x == pacman[0] && y == pacman[1]) 
				{
                    dibujaPersonaje();

                } else if(x == fantasma1[0] && y == fantasma1[1]){
					dibujaFantasma();
                    
                } else if(x == fantasma2[0] && y == fantasma2[1]){
					dibujaFantasma();
                    
                }else {
					dibujaElemento(mapa[y][x]);
				}
			}
			System.out.println();
		}
		System.out.println();
		System.out.println("Utilice las teclas WASD y luego presione Enter para moverse por el mapa.");

	}

    private static void dibujaElemento(int elementos) {

		String[] terreno = {
				 " . " ,
				 "[ ]" ,
                 "   " ,
		};
		System.out.print(terreno[elementos]);
	}
}

