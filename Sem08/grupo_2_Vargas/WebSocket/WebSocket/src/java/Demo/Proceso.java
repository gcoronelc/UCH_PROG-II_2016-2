/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Demo;
import java.io.IOException;

import javax.websocket.OnClose;
import javax.websocket.OnMessage;
import javax.websocket.OnOpen;
import javax.websocket.Session;
import javax.websocket.server.ServerEndpoint;

@ServerEndpoint("/proceso")
public class Proceso {
@OnOpen
public void onOpen(Session session){
    System.out.println(session.getId()+ "ha abierto una conexion");
    try {
        session.getBasicRemote().sendText("Coneccion establecida");
            }
    catch (IOException ex){
        ex.printStackTrace(); 
    }
}
    @OnOpen
public void OnMessage(String message, Session session){
    System.out.println("Mensaje"+session.getId()+": "+message);
    try {
        session.getBasicRemote().sendText(message);
            }
    catch (IOException ex){
        ex.printStackTrace();
        
    }}
 @OnClose
public void OnClose(Session session){
    System.out.println("Sesion"+session.getId()+"ha terminado");

}}
