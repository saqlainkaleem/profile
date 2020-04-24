interface Area {
	public void Rectanglearea();
	public void Circlearea();
}
Class Rectangle implements Area{
	public void Rectanglearea()
	{
		int l=10, b=5,area1;
		area1=l*b;
		System.out.println("Area of Rectangle = "+area1);
	}
}
Class Circle implements Area{
	public void Circlearea()
	{
		int r=5;
		float area2=0f;
		area2=3.14*r*r;
		System.out.println("Area of Circle = "+area2);
	}
}
Class JAVA8{
	public static void main()
	{
		Rectangle obj1= new Rectangle();
		Circle obj2= new Circle();
		obj1.Rectanglearea();
		obj2.Circlearea();
	}
}