// Jake Schinasi Lab 7
public class Cards {
    private String face, suit;
	public Cards(String f, String s){
	face = f;
	suit = s;
	
	}
	public String getFace(){
		return face;
		
	}
	public void getFace(String face){
		this.face = face;
		
	}
	public String getSuit(){
		return suit;
		
	}
	public void setSuit(String suit){
		this.suit = suit;
		
	}
	@Override
	public String toString(){
		return face + "of" + suit;
		
	}
}

class Deck{
	private Cards[] cards;
	private static final String[] suits = {"Hearts", "Clubs", "Diamonds", "Spades"};
	private static final String[] faces = {"Ace", "2", "3", "4", "5", "6", "7", "8", "9", "10", "Jack", "Queen", "King"};
	
	public Deck(){
		cards = new Cards[52];
		int i = 0;
		for(int j=0; j<4; j++){
		for(int k=0; k<13; k++){
			cards[i++] = new Cards(faces[k], suits[j]);
			
		}
		}
	}
public void test(){
	for(int i=0; i<cards.length; i++){
		System.out.println(cards[i]);
	}
}
public void print() {
}

}