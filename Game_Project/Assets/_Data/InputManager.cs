using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class InputManager : MonoBehaviour
{
    private static InputManager instance;

    public static InputManager Instance { get => instance; }// bao ve instance 

    [SerializeField] protected Vector3 mouseWorldPos;

    public Vector3 MouseWorldPos { get => mouseWorldPos; }

    [SerializeField] protected float onFiring;

    public float OnFiring { get => onFiring; }

    private void Awake()
    {
        if (InputManager.instance != null) Debug.LogWarning("Only 1 InputManager allow to exist");// canh bao khi co them 1 folder Input Manager khac
        InputManager.instance = this;
    }

    void Update()
    {
        this.GetMouseDown();
    }

    void FixedUpdate()
    {
        this.GetMousePos();
    }

    protected virtual void GetMouseDown()
    {
        this.onFiring = Input.GetAxis("Fire1");
    }

    protected virtual void GetMousePos()
    {
        this.mouseWorldPos = Camera.main.ScreenToWorldPoint(Input.mousePosition);
    }
}
